<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'https://github.com/jitin-joseph/php-deploy-test.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('185.151.48.42')
    ->set('remote_user', 'id_rsa_dms')
    ->set('deploy_path', '/deploy_test');

// Hooks

after('deploy:failed', 'deploy:unlock');
