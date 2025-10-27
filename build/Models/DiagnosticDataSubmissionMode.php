<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DiagnosticDataSubmissionMode - Enum
 * Allow the device to send diagnostic and usage telemetry data, such as Watson.
 */
enum DiagnosticDataSubmissionMode: string
{
    case USERDEFINED = 'userDefined';
    case NONE = 'none';
    case BASIC = 'basic';
    case ENHANCED = 'enhanced';
    case FULL = 'full';
}
