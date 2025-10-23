<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetContent
 */
class DocumentSetContent
{
    /** 
     * Content type information of the file.
     * @var ContentTypeInfo|\stdClass|null
     */
    public mixed $contentType = null;

    /** Name of the file in resource folder that should be added as a default content or a template in the document set. */
    public ?string $fileName = null;

    /** Folder name in which the file will be placed when a new document set is created in the library. */
    public ?string $folderName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['contentType'])) {
            $this->contentType = is_array($data['contentType']) ? new ContentTypeInfo($data['contentType']) : $data['contentType'];
        }
        if (isset($data['fileName'])) {
            $this->fileName = $data['fileName'];
        }
        if (isset($data['folderName'])) {
            $this->folderName = $data['folderName'];
        }
    }
}
