<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryAddToReviewSetOperation
 */
class SecurityEdiscoveryAddToReviewSetOperation
{
    public function __construct(
        /** The options to add items to the review set. Possible values are: allVersions, linkedFiles, unknownFutureValue, advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder. */
        public ?string $additionalDataOptions = null,
        /** Specifies the number of most recent versions of cloud attachments to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue. */
        public ?string $cloudAttachmentVersion = null,
        /** Specifies the number of most recent versions of SharePoint documents to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue. */
        public ?string $documentVersion = null,
        /** The items to include in the review set. Possible values are: searchHits, partiallyIndexed, unknownFutureValue. */
        public ?string $itemsToInclude = null,
        /** Contains the properties for report file metadata, including downloadUrl, fileName, and size. */
        public array $reportFileMetadata = [],
        /** eDiscovery review set to which items matching source collection query gets added. */
        public ?string $reviewSet = null,
        /** eDiscovery search that gets added to review set. */
        public ?string $search = null
    ) {}
}
