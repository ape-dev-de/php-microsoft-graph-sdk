<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementFileVersion;

/**
 * Request builder for individual AgreementFileVersion item
 */
class AgreementFileVersionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AgreementFileVersion item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AgreementFileVersion
     */
    public function get(?array $queryParameters = null): AgreementFileVersion
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AgreementFileVersion::class);
    }

    /**
     * Update AgreementFileVersion item
     *
     * @param AgreementFileVersion $item The item with updated properties
     * @return AgreementFileVersion
     */
    public function patch(AgreementFileVersion $item): AgreementFileVersion
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AgreementFileVersion::class);
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
