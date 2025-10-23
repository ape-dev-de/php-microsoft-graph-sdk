<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Onenote
 */
class Onenote
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     * @var Notebook[]
     */
    public array $notebooks = [];

    /** 
     * The status of OneNote operations. Getting an operations collection isn't supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     * @var OnenoteOperation[]
     */
    public array $operations = [];

    /** 
     * The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @var OnenotePage[]
     */
    public array $pages = [];

    /** 
     * The image and other file resources in OneNote pages. Getting a resources collection isn't supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     * @var OnenoteResource[]
     */
    public array $resources = [];

    /** 
     * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @var SectionGroup[]
     */
    public array $sectionGroups = [];

    /** 
     * The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @var OnenoteSection[]
     */
    public array $sections = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['notebooks'])) {
            $this->notebooks = $data['notebooks'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['pages'])) {
            $this->pages = $data['pages'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
        }
        if (isset($data['sectionGroups'])) {
            $this->sectionGroups = $data['sectionGroups'];
        }
        if (isset($data['sections'])) {
            $this->sections = $data['sections'];
        }
    }
}
