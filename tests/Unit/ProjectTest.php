<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    	/** @test */	
    public function test_it_has_a_path()
    {
      	$project = Project::factory()->create();

        $this->assertEquals('/projects/' . $project->id, $project->path());
    }
}
