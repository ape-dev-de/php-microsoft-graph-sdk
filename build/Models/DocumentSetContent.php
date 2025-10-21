<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetContent
 */
class DocumentSetContent
{
    public function __construct(
        /** Content type information of the file. */
        public ?ContentTypeInfo $contentType = null,
        /** Name of the file in resource folder that should be added as a default content or a template in the document set. */
        public ?string $fileName = null,
        /** Folder name in which the file will be placed when a new document set is created in the library. */
        public ?string $folderName = null
    ) {}
}
