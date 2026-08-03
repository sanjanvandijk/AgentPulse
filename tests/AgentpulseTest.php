<?php
/**
 * Tests for AgentPulse
 */

use PHPUnit\Framework\TestCase;
use Agentpulse\Agentpulse;

class AgentpulseTest extends TestCase {
    private Agentpulse $instance;

    protected function setUp(): void {
        $this->instance = new Agentpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Agentpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
