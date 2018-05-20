<?php

namespace HnhDigital\LinodeApi\Account;

/*
 * This file is part of the PHP Linode API.
 *
 * (c) H&H|Digital <hello@hnh.digital>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use HnhDigital\LinodeApi\Foundation\Base;

/**
 * This is the OauthClients class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Account-OauthClients
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class OauthClients extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'account/oauth-clients';

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Returns a paginated list of OAuth Clients registered to your Account.  OAuth Clients allow users to log into
     * applications you write or host using their Linode Account, and may allow them to grant some level of access to their
     * Linodes or other entities to your application.
     *
     * @link https://developers.linode.com/api/v4#operation/getClients
     *
     * @return array
     */
    public function get()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Client', 'parameters' => ['id']]);
    }

    /**
     * Creates an OAuth Client, which can be used to allow users (using their Linode account) to log in to your own
     * application, and optionally grant your application some amount of access to their Linodes or other entities.
     *
     * @link https://developers.linode.com/api/v4#operation/createClient
     *
     * @return mixed
     */
    public function createClient()
    {
        return $this->apiCall('post', '');
    }
}
