<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EventManagementTest extends TestCase
{
    use RefreshDatabase;

    private $organizer;
    private $category;

    public function setUp(): void
    {
        parent::setUp();

        $this->category = Category::factory()->create();
        $this->organizer = User::factory()->create();
        $role = Role::create(['name' => 'organizer']);
        $permission = Permission::create(['name' => 'manage_event']);
        $role->givePermissionTo($permission);
        $this->organizer->assignRole($role);
    }

    public function test_create_event()
    {
        $response = $this->actingAs($this->organizer)->post('/organizer/event', [
            'title' => 'Event 20',
            'organization' => 'UM6P',
            'description' => 'Just testing with testing class',
            'starting_at' => '2024-03-20',
            'validation_type' => 'automatic',
            'address' => 'Settat',
            'places' => '120',
            'category_id' => $this->category->id,
        ]);

        $this->assertCount(1, Event::all());
    }

    public function test_update_event()
    {
        # create new Event :
        $event = Event::create([
            'title' => 'Showcase',
            'organization' => 'Youcode',
            'description' => 'Just testing with testing class',
            'starting_at' => '2024-03-20',
            'validation_type' => 'automatic',
            'address' => 'Youssofia',
            'places' => '20',
            'category_id' => $this->category->id,
            'user_id' => $this->organizer->id
        ]);

        # Updated Data :
        $updated_title = 'Event TEST';
        $updated_organization = 'useem';

        # Send Data to controller :
        $response = $this->actingAs($this->organizer)->put(route('event.update', $event->id), [
            'title' => $updated_title,
            'organization' => $updated_organization,
            'description' => 'Just testing with testing class',
            'starting_at' => '2024-03-20',
            'validation_type' => 'automatic',
            'address' => 'Youssofia',
            'places' => '20',
            'category_id' => $this->category->id,
        ]);

        # check updated data :
        $updatedEvent = Event::find($event->id);

        $this->assertEquals($updated_title, $updatedEvent->title);
        $this->assertEquals($updated_organization, $updatedEvent->organization);
    }
    public function test_delete_event()
    {
        # create new Event :
        $event = Event::create([
            'title' => 'Showcase',
            'organization' => 'Youcode',
            'description' => 'Just testing with testing class',
            'starting_at' => '2024-03-20',
            'validation_type' => 'automatic',
            'address' => 'Youssofia',
            'places' => '20',
            'category_id' => $this->category->id,
            'user_id' => $this->organizer->id
        ]);

        $response = $this->actingAs($this->organizer)->delete(route('event.destroy', $event->id));

        $this->assertModelMissing($event);
    }
}
