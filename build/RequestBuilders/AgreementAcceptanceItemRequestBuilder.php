<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementAcceptance;

/**
 * Request builder for individual AgreementAcceptance item
 */
class AgreementAcceptanceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AgreementAcceptance item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AgreementAcceptance
     */
    public function get(?array $queryParameters = null): AgreementAcceptance
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AgreementAcceptance::class);
    }

    /**
     * Update AgreementAcceptance item
     *
     * @param AgreementAcceptance $item The item with updated properties
     * @return AgreementAcceptance
     */
    public function patch(AgreementAcceptance $item): AgreementAcceptance
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AgreementAcceptance::class);
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
