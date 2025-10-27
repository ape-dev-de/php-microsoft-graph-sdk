<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebsiteType - Enum
 */
enum WebsiteType: string
{
    case OTHER = 'other';
    case HOME = 'home';
    case WORK = 'work';
    case BLOG = 'blog';
    case PROFILE = 'profile';
}
