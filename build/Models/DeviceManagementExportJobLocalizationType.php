<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExportJobLocalizationType - Enum
 * Configures how the requested export job is localized.
 */
enum DeviceManagementExportJobLocalizationType: string
{
    case LOCALIZEDVALUESASADDITIONALCOLUMN = 'localizedValuesAsAdditionalColumn';
    case REPLACELOCALIZABLEVALUES = 'replaceLocalizableValues';
}
