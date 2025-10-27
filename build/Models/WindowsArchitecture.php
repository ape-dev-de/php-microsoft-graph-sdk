<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsArchitecture - Enum
 * Contains properties for Windows architecture.
 */
enum WindowsArchitecture: string
{
    case NONE = 'none';
    case X86 = 'x86';
    case X64 = 'x64';
    case ARM = 'arm';
    case NEUTRAL = 'neutral';
}
