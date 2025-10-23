<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventPresenter
 */
class VirtualEventPresenter
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Email address of the presenter. */
    public ?string $email = null;

    /** 
     * Identity information of the presenter. The supported identities are: communicationsGuestIdentity and communicationsUserIdentity.
     * @var Identity|\stdClass|null
     */
    public mixed $identity = null;

    /** 
     * Other details about the presenter. This property returns null when the virtual event type is virtualEventTownhall.
     * @var VirtualEventPresenterDetails|\stdClass|null
     */
    public mixed $presenterDetails = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
        if (isset($data['identity'])) {
            $this->identity = $data['identity'];
        }
        if (isset($data['presenterDetails'])) {
            $this->presenterDetails = $data['presenterDetails'];
        }
    }
}
