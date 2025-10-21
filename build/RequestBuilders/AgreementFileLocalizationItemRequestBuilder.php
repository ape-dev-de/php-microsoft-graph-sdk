<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementFileLocalization;

/**
 * Request builder for individual AgreementFileLocalization item
 */
class AgreementFileLocalizationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AgreementFileLocalization item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AgreementFileLocalization
     */
    public function get(?array $queryParameters = null): AgreementFileLocalization
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AgreementFileLocalization::class);
    }

    /**
     * Update AgreementFileLocalization item
     *
     * @param AgreementFileLocalization $item The item with updated properties
     * @return AgreementFileLocalization
     */
    public function patch(AgreementFileLocalization $item): AgreementFileLocalization
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AgreementFileLocalization::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
