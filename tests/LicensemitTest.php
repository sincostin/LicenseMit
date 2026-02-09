<?php
/**
 * Tests for LicenseMit
 */

use PHPUnit\Framework\TestCase;
use Licensemit\Licensemit;

class LicensemitTest extends TestCase {
    private Licensemit $instance;

    protected function setUp(): void {
        $this->instance = new Licensemit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Licensemit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
