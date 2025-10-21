<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventPresenterDetails resources
 *
 * Available select fields:
 * - bio
 * - company
 * - jobTitle
 * - linkedInProfileWebUrl
 * - personalSiteWebUrl
 * - photo
 * - twitterProfileWebUrl
 */
class VirtualEventPresenterDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEventPresenterDetails
     */
    public const FIELD_BIO = 'bio';
    public const FIELD_COMPANY = 'company';
    public const FIELD_JOB_TITLE = 'jobTitle';
    public const FIELD_LINKED_IN_PROFILE_WEB_URL = 'linkedInProfileWebUrl';
    public const FIELD_PERSONAL_SITE_WEB_URL = 'personalSiteWebUrl';
    public const FIELD_PHOTO = 'photo';
    public const FIELD_TWITTER_PROFILE_WEB_URL = 'twitterProfileWebUrl';

    /**
     * Select specific VirtualEventPresenterDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
