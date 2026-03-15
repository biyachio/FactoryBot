<?php
/**
 * Tests for FactoryBotJs
 */

use PHPUnit\Framework\TestCase;
use Factorybotjs\Factorybotjs;

class FactorybotjsTest extends TestCase {
    private Factorybotjs $instance;

    protected function setUp(): void {
        $this->instance = new Factorybotjs(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Factorybotjs::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
