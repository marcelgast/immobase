<?php

// SPDX-License-Identifier: AGPL-3.0-or-later
// SPDX-FileCopyrightText: 2026 Marcel Gast

declare(strict_types=1);

namespace App\Tests\Shared\Fixture;

final class RecordingHandler
{
    /** @var list<string> */
    public array $seen = [];

    public function __invoke(SomethingHappened $event): void
    {
        $this->seen[] = $event->unitId;
    }
}
