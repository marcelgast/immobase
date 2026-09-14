<?php

// SPDX-License-Identifier: AGPL-3.0-or-later
// SPDX-FileCopyrightText: 2026 Marcel Gast

declare(strict_types=1);

namespace App\Module\Portal\Domain;

use RuntimeException;

/**
 * Ohne Schluessel keine Dateien.
 */
final class FileVaultIsNotReady extends RuntimeException
{
    public static function withoutAKey(): self
    {
        return new self('portal.error.no_file_key');
    }
}
