<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Onenote
 */
class Onenote
{
    public function __construct(
        /** The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable. */
        public array $notebooks = [],
        /** The status of OneNote operations. Getting an operations collection isn''t supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable. */
        public array $operations = [],
        /** The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable. */
        public array $pages = [],
        /** The image and other file resources in OneNote pages. Getting a resources collection isn''t supported, but you can get the binary content of a specific resource. Read-only. Nullable. */
        public array $resources = [],
        /** The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable. */
        public array $sectionGroups = [],
        /** @var string[] The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable. */
        public array $sections = []
    ) {}
}
