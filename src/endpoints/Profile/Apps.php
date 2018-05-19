<?php

namespace HnhDigital\LinodeApi\Profile;

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
 * This is the Apps class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Profile-Apps
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Apps extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'profile/apps';

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
     * This is a collection of OAuth apps that you've given access to your Account, and includes the level of access granted.
     *
     * @link https://developers.linode.com/api/v4#operation/getProfileApps
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }
}