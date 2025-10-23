<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointOneDriveOptions
 */
class SharePointOneDriveOptions
{
    /** 
     * The type of search content. The possible values are: sharedContent, privateContent, unknownFutureValue. Read-only.
     * @var SearchContent|\stdClass|null
     */
    public mixed $includeContent = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['includeContent'])) {
            $this->includeContent = is_array($data['includeContent']) ? new SearchContent($data['includeContent']) : $data['includeContent'];
        }
    }
}
