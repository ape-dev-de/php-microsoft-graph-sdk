<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceRole
 */
class AccessPackageResourceRole
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** A description for the resource role. */
    public ?string $description = null;

    /** The display name of the resource role such as the role defined by the application. */
    public ?string $displayName = null;

    /** The unique identifier of the resource role in the origin system. For a SharePoint Online site, the originId is the sequence number of the role in the site. */
    public ?string $originId = null;

    /** The type of the resource in the origin system, such as SharePointOnline, AadApplication, or AadGroup. */
    public ?string $originSystem = null;

    /** 
     * 
     * @var AccessPackageResource|\stdClass|null
     */
    public mixed $resource = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['originId'])) {
            $this->originId = $data['originId'];
        }
        if (isset($data['originSystem'])) {
            $this->originSystem = $data['originSystem'];
        }
        if (isset($data['resource'])) {
            $this->resource = $data['resource'];
        }
    }
}
