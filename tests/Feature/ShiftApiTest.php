<?php

namespace Tests\Feature;

use App\Models\Shift;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShiftApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp():void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_can_list_shifts()
    {
        $this->get('/api/shifts')
            ->assertStatus(200)
            ->assertJson (Shift::all()->toArray());
    }

    public function test_can_create_shift()
    {
        $formData = [
            'worker_id' => 1,
            'type_shift_id' => 1
        ] ;
        $this->post('/api/shifts', $formData)
             ->assertStatus(201);
    }

    public function test_can_show_shift()
    {
        $this->get('/api/shifts/1')
             ->assertStatus(200)
             ->assertJson(Shift::find(1)->toArray());
    }

    public function test_can_update_shift()
    {
        $formData = [
            'worker_id' => 1,
            'type_shift_id' => 1
        ] ;
        $this->put('/api/shifts/1', $formData)
            ->assertStatus(200);
    }

    public function test_can_delete_shift()
    {
        $this->delete('/api/shifts/1')
            ->assertStatus(200);
    }
}
