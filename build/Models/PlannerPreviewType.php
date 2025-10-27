<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPreviewType - Enum
 */
enum PlannerPreviewType: string
{
    case AUTOMATIC = 'automatic';
    case NOPREVIEW = 'noPreview';
    case CHECKLIST = 'checklist';
    case DESCRIPTION = 'description';
    case REFERENCE = 'reference';
}
