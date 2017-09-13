<?php
/**
 * ping
 */
function ping()
{
    echo 'Pong';
}

/**
 * wifi连接后出现的登录页
 */
function login()
{
    if (isset($_GET['redir']) && $_GET['redir']) {
        header('Location: ' . $_GET['redir']);
        return;
    }
    $_GET['token'] = md5(json_encode($_GET));
    $_GET['redir'] = sprintf('http://%s:%d/wifidog/auth?%s', $_GET['gw_address'], $_GET['gw_port'], http_build_query([
        'token' => $_GET['token']
    ]));

    extract($_GET);

    include __DIR__ . '/tpl/login.php';
}

/**
 * 登录成功后
 */
function portal()
{
    extract($_GET);

    include __DIR__ . '/tpl/portal.php';
}

/**
 * 路由器请求服务器验证token是否有效
 *
 * 0 - AUTH_DENIED - User firewall users are deleted and the user removed.
 * 6 - AUTH_VALIDATION_FAILED - User email validation timeout has occured and user/firewall is deleted
 * 1 - AUTH_ALLOWED - User was valid, add firewall rules if not present
 * 5 - AUTH_VALIDATION - Permit user access to email to get validation email under default rules
 * -1 - AUTH_ERROR - An error occurred during the validation process
 */
function auth()
{
    echo 'Auth: 1';
}

/**
 * 退出登录
 */
function logout()
{

}
