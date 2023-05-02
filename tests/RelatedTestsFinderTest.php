<?php

declare(strict_types=1);

use Cnimmo\TestOnlyChanged\RelatedTestsFinder;
use PHPUnit\Framework\TestCase;

final class RelatedTestsFinderTest extends TestCase
{
    public function testPasses(): void
    {
        $this->assertNotNull(RelatedTestsFinder::class);
    }
}

