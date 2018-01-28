<?php

namespace HnhDigital\LinodeApi\Instance;

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
 * This is the Configs class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/configs
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Configs extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/instances/%s/configs';

    /**
     * linode_id.
     *
     * @var int
     */
    protected $linode_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($linode_id)
    {
        $this->linode_id = $linode_id;

        parent::__construct($linode_id);
    }

    /**
     * Returns a list of configs for a given Linode.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/configs#GET
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Creates a new config for a given Linode.
     *
     * @param string $kernel (optional)A kernel ID to boot this Linode with. Defaults to "linode/latest-64bit".
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/configs#POST
     * 
     * @return bool
     */
    public function update($kernel = 'linode/latest-64bit')
    {
        return $this->call('post', "", []);
    }

}
