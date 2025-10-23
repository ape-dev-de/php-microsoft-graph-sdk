<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Folder
 */
class Folder
{
    /** Number of children contained immediately within this container. */
    public ?float $childCount = null;

    /** 
     * A collection of properties defining the recommended view for the folder.
     * @var FolderView|\stdClass|null
     */
    public mixed $view = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['childCount'])) {
            $this->childCount = $data['childCount'];
        }
        if (isset($data['view'])) {
            $this->view = $data['view'];
        }
    }
}
