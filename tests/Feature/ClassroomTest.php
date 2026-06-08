<?php

use App\Models\Classroom;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
});

test('authenticated user can view the classroom edit page', function () {
    $classroom = Classroom::create([
        'name' => 'Kelas A',
        'teacher' => 'Budi',
        'academic_year' => '2025',
    ]);

    $response = $this->get(route('classrooms.edit', $classroom));

    $response->assertStatus(200);
    $response->assertSee('Edit Data Kelas');
});

test('authenticated user can update a classroom', function () {
    $classroom = Classroom::create([
        'name' => 'Kelas A',
        'teacher' => 'Budi',
        'academic_year' => '2025',
    ]);

    $response = $this->put(route('classrooms.update', $classroom), [
        'name' => 'Kelas B',
        'teacher' => 'Siti',
        'academic_year' => '2026',
    ]);

    $response->assertRedirect(route('classrooms.index'));
    $this->assertDatabaseHas('classrooms', [
        'id' => $classroom->id,
        'name' => 'Kelas B',
        'teacher' => 'Siti',
        'academic_year' => '2026',
    ]);
});
