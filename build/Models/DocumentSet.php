<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSet
 */
class DocumentSet
{
    /** 
     * Content types allowed in document set.
     * @var ContentTypeInfo[]
     */
    public array $allowedContentTypes = [];

    /** 
     * Default contents of document set.
     * @var DocumentSetContent[]
     */
    public array $defaultContents = [];

    /** Specifies whether to push welcome page changes to inherited content types. */
    public ?bool $propagateWelcomePageChanges = null;

    /** Indicates whether to add the name of the document set to each file name. */
    public ?bool $shouldPrefixNameToFile = null;

    /** Welcome page absolute URL. */
    public ?string $welcomePageUrl = null;

    /** 
     * 
     * @var ColumnDefinition[]
     */
    public array $sharedColumns = [];

    /** 
     * 
     * @var ColumnDefinition[]
     */
    public array $welcomePageColumns = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowedContentTypes'])) {
            $this->allowedContentTypes = $data['allowedContentTypes'];
        }
        if (isset($data['defaultContents'])) {
            $this->defaultContents = $data['defaultContents'];
        }
        if (isset($data['propagateWelcomePageChanges'])) {
            $this->propagateWelcomePageChanges = $data['propagateWelcomePageChanges'];
        }
        if (isset($data['shouldPrefixNameToFile'])) {
            $this->shouldPrefixNameToFile = $data['shouldPrefixNameToFile'];
        }
        if (isset($data['welcomePageUrl'])) {
            $this->welcomePageUrl = $data['welcomePageUrl'];
        }
        if (isset($data['sharedColumns'])) {
            $this->sharedColumns = $data['sharedColumns'];
        }
        if (isset($data['welcomePageColumns'])) {
            $this->welcomePageColumns = $data['welcomePageColumns'];
        }
    }
}
