<?php
/**
 * Tests for CrewPlonk
 */

use PHPUnit\Framework\TestCase;
use Crewplonk\Crewplonk;

class CrewplonkTest extends TestCase {
    private Crewplonk $instance;

    protected function setUp(): void {
        $this->instance = new Crewplonk(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewplonk::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
