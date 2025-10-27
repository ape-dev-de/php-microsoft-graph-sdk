<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VisibilitySetting - Enum
 * Generic visibility state.
 */
enum VisibilitySetting: string
{
    case NOTCONFIGURED = 'notConfigured';
    case HIDE = 'hide';
    case SHOW = 'show';
}
