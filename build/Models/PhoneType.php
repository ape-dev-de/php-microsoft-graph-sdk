<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhoneType - Enum
 */
enum PhoneType: string
{
    case HOME = 'home';
    case BUSINESS = 'business';
    case MOBILE = 'mobile';
    case OTHER = 'other';
    case ASSISTANT = 'assistant';
    case HOMEFAX = 'homeFax';
    case BUSINESSFAX = 'businessFax';
    case OTHERFAX = 'otherFax';
    case PAGER = 'pager';
    case RADIO = 'radio';
}
