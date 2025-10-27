<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAdditionalDataOptions - Enum
 */
enum SecurityAdditionalDataOptions: string
{
    case ALLVERSIONS = 'allVersions';
    case LINKEDFILES = 'linkedFiles';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case ADVANCEDINDEXING = 'advancedIndexing';
    case LISTATTACHMENTS = 'listAttachments';
    case HTMLTRANSCRIPTS = 'htmlTranscripts';
    case MESSAGECONVERSATIONEXPANSION = 'messageConversationExpansion';
    case LOCATIONSWITHOUTHITS = 'locationsWithoutHits';
    case ALLITEMSINFOLDER = 'allItemsInFolder';
}
