<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAdditionalOptions - Enum
 */
enum SecurityAdditionalOptions: string
{
    case NONE = 'none';
    case TEAMSANDYAMMERCONVERSATIONS = 'teamsAndYammerConversations';
    case CLOUDATTACHMENTS = 'cloudAttachments';
    case ALLDOCUMENTVERSIONS = 'allDocumentVersions';
    case SUBFOLDERCONTENTS = 'subfolderContents';
    case LISTATTACHMENTS = 'listAttachments';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case HTMLTRANSCRIPTS = 'htmlTranscripts';
    case ADVANCEDINDEXING = 'advancedIndexing';
    case ALLITEMSINFOLDER = 'allItemsInFolder';
    case INCLUDEFOLDERANDPATH = 'includeFolderAndPath';
    case CONDENSEPATHS = 'condensePaths';
    case FRIENDLYNAME = 'friendlyName';
    case SPLITSOURCE = 'splitSource';
    case INCLUDEREPORT = 'includeReport';
}
