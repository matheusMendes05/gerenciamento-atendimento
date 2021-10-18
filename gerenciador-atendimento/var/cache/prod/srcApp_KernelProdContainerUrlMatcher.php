<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/admin' => array(array(array('_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminController::index'), null, null, null, true, null)),
            '/admin/acumular_atendimentos' => array(array(array('_route' => 'admin_acumular_atendimentos', '_controller' => 'App\\Controller\\Admin\\AdminController::acumularAtendimentos'), null, array('POST' => 0), null, false, null)),
            '/admin/limpar_atendimentos' => array(array(array('_route' => 'admin_limpar_atendimentos', '_controller' => 'App\\Controller\\Admin\\AdminController::limparAtendimentos'), null, array('POST' => 0), null, false, null)),
            '/admin/api' => array(array(array('_route' => 'admin_api_index', '_controller' => 'App\\Controller\\Admin\\ApiController::index'), null, null, null, true, null)),
            '/admin/api/oauth-clients' => array(
                array(array('_route' => 'admin_api_clients', '_controller' => 'App\\Controller\\Admin\\ApiController::oauthClients'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'admin_api_newclient', '_controller' => 'App\\Controller\\Admin\\ApiController::newOauthClient'), null, array('POST' => 0), null, false, null),
            ),
            '/admin/departamentos' => array(array(array('_route' => 'admin_departamentos_index', '_controller' => 'App\\Controller\\Admin\\DepartamentoController::index'), null, null, null, true, null)),
            '/admin/departamentos/new' => array(array(array('_route' => 'admin_departamentos_new', '_controller' => 'App\\Controller\\Admin\\DepartamentoController::form'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/admin/locais' => array(array(array('_route' => 'admin_locais_index', '_controller' => 'App\\Controller\\Admin\\LocaisController::index'), null, null, null, true, null)),
            '/admin/locais/new' => array(array(array('_route' => 'admin_locais_new', '_controller' => 'App\\Controller\\Admin\\LocaisController::form'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/admin/modulos' => array(array(array('_route' => 'admin_modulos_index', '_controller' => 'App\\Controller\\Admin\\ModulosController::index'), null, null, null, true, null)),
            '/admin/modulos/update' => array(array(array('_route' => 'admin_modulos_update', '_controller' => 'App\\Controller\\Admin\\ModulosController::update'), null, null, null, false, null)),
            '/admin/perfis' => array(array(array('_route' => 'admin_perfis_index', '_controller' => 'App\\Controller\\Admin\\PerfisController::index'), null, null, null, true, null)),
            '/admin/perfis/new' => array(array(array('_route' => 'admin_perfis_new', '_controller' => 'App\\Controller\\Admin\\PerfisController::form'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/admin/prioridades' => array(array(array('_route' => 'admin_prioridades_index', '_controller' => 'App\\Controller\\Admin\\PrioridadesController::index'), null, null, null, true, null)),
            '/admin/prioridades/new' => array(array(array('_route' => 'admin_prioridades_new', '_controller' => 'App\\Controller\\Admin\\PrioridadesController::form'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/admin/servicos' => array(array(array('_route' => 'admin_servicos_index', '_controller' => 'App\\Controller\\Admin\\ServicosController::index'), null, array('GET' => 0), null, true, null)),
            '/admin/servicos/new' => array(array(array('_route' => 'admin_servicos_new', '_controller' => 'App\\Controller\\Admin\\ServicosController::form'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/admin/unidades' => array(array(array('_route' => 'admin_unidades_index', '_controller' => 'App\\Controller\\Admin\\UnidadesController::index'), null, null, null, true, null)),
            '/admin/unidades/new' => array(array(array('_route' => 'admin_unidades_new', '_controller' => 'App\\Controller\\Admin\\UnidadesController::form'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/api/agendamentos' => array(
                array(array('_route' => 'app_api_agendamentos_post', '_controller' => 'App\\Controller\\Api\\AgendamentosController::post'), null, array('POST' => 0), null, false, null),
                array(array('_route' => 'app_api_agendamentos_dofind', '_controller' => 'App\\Controller\\Api\\AgendamentosController::doFind'), null, array('GET' => 0), null, false, null),
            ),
            '/api/atendimentos' => array(array(array('_route' => 'app_api_atendimentos_dofind', '_controller' => 'App\\Controller\\Api\\AtendimentosController::doFind'), null, array('GET' => 0), null, false, null)),
            '/api/atendimentoshistorico' => array(array(array('_route' => 'app_api_atendimentoshistorico_dofind', '_controller' => 'App\\Controller\\Api\\AtendimentosHistoricoController::doFind'), null, array('GET' => 0), null, false, null)),
            '/api' => array(
                array(array('_route' => 'app_api_default_index', '_controller' => 'App\\Controller\\Api\\DefaultController::index'), null, null, null, false, null),
                array(array('_route' => 'app_api_default_index_1', '_controller' => 'App\\Controller\\Api\\DefaultController::index'), null, null, null, true, null),
            ),
            '/api/departamentos' => array(
                array(array('_route' => 'app_api_departamentos_dofind', '_controller' => 'App\\Controller\\Api\\DepartamentosController::doFind'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_departamentos_dopost', '_controller' => 'App\\Controller\\Api\\DepartamentosController::doPost'), null, array('POST' => 0), null, false, null),
            ),
            '/api/filas' => array(array(array('_route' => 'app_api_filas_alterastatus', '_controller' => 'App\\Controller\\Api\\FilasController::alteraStatus'), null, array('PUT' => 0), null, false, null)),
            '/api/locais' => array(
                array(array('_route' => 'app_api_locais_dofind', '_controller' => 'App\\Controller\\Api\\LocaisController::doFind'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_locais_dopost', '_controller' => 'App\\Controller\\Api\\LocaisController::doPost'), null, array('POST' => 0), null, false, null),
            ),
            '/api/prioridades' => array(
                array(array('_route' => 'app_api_prioridades_dofind', '_controller' => 'App\\Controller\\Api\\PrioridadesController::doFind'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_prioridades_dopost', '_controller' => 'App\\Controller\\Api\\PrioridadesController::doPost'), null, array('POST' => 0), null, false, null),
            ),
            '/api/servicos' => array(
                array(array('_route' => 'app_api_servicos_dofind', '_controller' => 'App\\Controller\\Api\\ServicosController::doFind'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_servicos_dopost', '_controller' => 'App\\Controller\\Api\\ServicosController::doPost'), null, array('POST' => 0), null, false, null),
            ),
            '/api/distribui' => array(array(array('_route' => 'app_api_triagem_distribui', '_controller' => 'App\\Controller\\Api\\TriagemController::distribui'), null, array('POST' => 0), null, false, null)),
            '/api/unidades' => array(
                array(array('_route' => 'app_api_unidades_dofind', '_controller' => 'App\\Controller\\Api\\UnidadesController::doFind'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_unidades_dopost', '_controller' => 'App\\Controller\\Api\\UnidadesController::doPost'), null, array('POST' => 0), null, false, null),
            ),
            '/api/usuarios' => array(array(array('_route' => 'app_api_usuarios_dofind', '_controller' => 'App\\Controller\\Api\\UsuariosController::doFind'), null, array('GET' => 0), null, false, null)),
            '/' => array(array(array('_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::index'), null, null, null, false, null)),
            '/about' => array(array(array('_route' => 'about', '_controller' => 'App\\Controller\\DefaultController::about'), null, null, null, false, null)),
            '/unidades' => array(array(array('_route' => 'app_default_unidades', '_controller' => 'App\\Controller\\DefaultController::unidades'), null, array('GET' => 0), null, false, null)),
            '/menu' => array(array(array('_route' => 'app_default_menu', '_controller' => 'App\\Controller\\DefaultController::menu'), null, array('GET' => 0), null, false, null)),
            '/profile' => array(
                array(array('_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfileController::index'), null, array('GET' => 0), null, true, null),
                array(array('_route' => 'profile_update', '_controller' => 'App\\Controller\\ProfileController::update'), null, array('POST' => 0), null, true, null),
            ),
            '/profile/password' => array(array(array('_route' => 'app_profile_password', '_controller' => 'App\\Controller\\ProfileController::password'), null, array('POST' => 0), null, false, null)),
            '/login' => array(array(array('_route' => 'app_security_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, null)),
            '/login_check' => array(array(array('_route' => 'login_check'), null, null, null, false, null)),
            '/logout' => array(array(array('_route' => 'logout'), null, null, null, false, null)),
            '/novosga.attendance' => array(array(array('_route' => 'novosga_attendance_index', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null, true, null)),
            '/novosga.attendance/set_local' => array(array(array('_route' => 'novosga_attendance_setlocal', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::setLocal'), null, array('POST' => 0), null, false, null)),
            '/novosga.attendance/ajax_update' => array(array(array('_route' => 'novosga_attendance_ajaxupdate', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::ajaxUpdate'), null, array('GET' => 0), null, false, null)),
            '/novosga.attendance/chamar' => array(array(array('_route' => 'novosga_attendance_chamar', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::chamar'), null, array('POST' => 0), null, false, null)),
            '/novosga.attendance/iniciar' => array(array(array('_route' => 'novosga_attendance_iniciar', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::iniciar'), null, array('POST' => 0), null, false, null)),
            '/novosga.attendance/nao_compareceu' => array(array(array('_route' => 'novosga_attendance_naocompareceu', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::naoCompareceu'), null, array('POST' => 0), null, false, null)),
            '/novosga.attendance/encerrar' => array(array(array('_route' => 'novosga_attendance_encerrar', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::encerrar'), null, array('POST' => 0), null, false, null)),
            '/novosga.attendance/redirecionar' => array(array(array('_route' => 'novosga_attendance_redirecionar', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::redirecionar'), null, array('POST' => 0), null, false, null)),
            '/novosga.attendance/consulta_senha' => array(array(array('_route' => 'novosga_attendance_consultasenha', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::consultaSenha'), null, array('GET' => 0), null, false, null)),
            '/novosga.settings' => array(array(array('_route' => 'novosga_settings_index', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null, true, null)),
            '/novosga.settings/servicos' => array(array(array('_route' => 'novosga_settings_servicos', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::servicos'), null, array('GET' => 0), null, false, null)),
            '/novosga.settings/servicos_unidade' => array(
                array(array('_route' => 'novosga_settings_servicos_unidade', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::servicosUnidade'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'novosga_settings_add_servico_unidade', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::addServico'), null, array('POST' => 0), null, false, null),
            ),
            '/novosga.settings/contadores' => array(array(array('_route' => 'novosga_settings_contadores', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::contadores'), null, array('GET' => 0), null, false, null)),
            '/novosga.settings/update_impressao' => array(array(array('_route' => 'novosga_settings_update_impressao', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateImpressao'), null, array('POST' => 0), null, false, null)),
            '/novosga.settings/limpar' => array(array(array('_route' => 'novosga_settings_limpar_dados', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::limparDados'), null, array('POST' => 0), null, false, null)),
            '/novosga.settings/acumular_atendimentos' => array(array(array('_route' => 'novosga_settings_acumular_atendimentos', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::reiniciar'), null, array('POST' => 0), null, false, null)),
            '/novosga.users' => array(array(array('_route' => 'novosga_users_index', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null, true, null)),
            '/novosga.users/new' => array(array(array('_route' => 'novosga_users_new', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::form'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/novosga.users/novalotacao' => array(array(array('_route' => 'novosga_users_default_novalotacao', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::novaLotacao'), null, array('GET' => 0), null, false, null)),
            '/novosga.users/unidades' => array(array(array('_route' => 'novosga_users_default_unidades', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::unidades'), null, array('GET' => 0), null, false, null)),
            '/novosga.triage' => array(array(array('_route' => 'novosga_triage_index', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null, true, null)),
            '/novosga.triage/ajax_update' => array(array(array('_route' => 'novosga_triage_ajax_update', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::ajaxUpdate'), null, array('GET' => 0), null, false, null)),
            '/novosga.triage/servico_info' => array(array(array('_route' => 'novosga_triage_servico_info', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::servicoInfo'), null, array('GET' => 0), null, false, null)),
            '/novosga.triage/distribui_senha' => array(array(array('_route' => 'novosga_triage_distribui_senha', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::distribuiSenha'), null, array('POST' => 0), null, false, null)),
            '/novosga.triage/consulta_senha' => array(array(array('_route' => 'novosga_triage_consulta_senha', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::consultaSenha'), null, array('GET' => 0), null, false, null)),
            '/novosga.triage/clientes' => array(array(array('_route' => 'novosga_triage_clientes', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::clientes'), null, array('GET' => 0), null, false, null)),
            '/novosga.reports' => array(array(array('_route' => 'novosga_reports_index', '_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null, true, null)),
            '/novosga.reports/chart' => array(array(array('_route' => 'novosga_reports_chart', '_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::chart'), null, array('POST' => 0), null, false, null)),
            '/novosga.reports/report' => array(array(array('_route' => 'novosga_reports_report', '_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::report'), null, array('GET' => 0), null, false, null)),
            '/novosga.monitor' => array(array(array('_route' => 'novosga_monitor_index', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null, true, null)),
            '/novosga.monitor/ajax_update' => array(array(array('_route' => 'novosga_monitor_ajaxupdate', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::ajaxUpdate'), null, array('GET' => 0), null, false, null)),
            '/novosga.monitor/buscar' => array(array(array('_route' => 'novosga_monitor_buscar', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::buscar'), null, array('GET' => 0), null, false, null)),
            '/api/token' => array(array(array('_route' => 'fos_oauth_server_token', '_controller' => 'fos_oauth_server.controller.token:tokenAction', 'route' => 'fos_oauth_server_token'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/a(?'
                        .'|dmin/(?'
                            .'|api/oauth\\-clients/([^/]++)(*:47)'
                            .'|departamentos/([^/]++)(?'
                                .'|(*:79)'
                            .')'
                            .'|locais/([^/]++)(?'
                                .'|(*:105)'
                            .')'
                            .'|p(?'
                                .'|erfis/([^/]++)(?'
                                    .'|(*:135)'
                                .')'
                                .'|rioridades/([^/]++)(?'
                                    .'|(*:166)'
                                .')'
                            .')'
                            .'|servicos/([^/]++)(?'
                                .'|(*:196)'
                            .')'
                            .'|unidades/([^/]++)(?'
                                .'|(*:225)'
                            .')'
                        .')'
                        .'|pi/(?'
                            .'|a(?'
                                .'|gendamentos/([^/]++)(*:265)'
                                .'|tendimentos(?'
                                    .'|/([^/]++)(*:296)'
                                    .'|historico/([^/]++)(*:322)'
                                .')'
                            .')'
                            .'|departamentos/([^/]++)(?'
                                .'|(*:357)'
                            .')'
                            .'|filas/([^/]++)(*:380)'
                            .'|locais/([^/]++)(?'
                                .'|(*:406)'
                            .')'
                            .'|u(?'
                                .'|nidades/([^/]++)(?'
                                    .'|/(?'
                                        .'|painel(*:448)'
                                        .'|servicos(*:464)'
                                        .'|atendimentos(*:484)'
                                    .')'
                                    .'|(*:493)'
                                .')'
                                .'|suarios/([^/]++)(*:518)'
                            .')'
                            .'|pri(?'
                                .'|oridades/([^/]++)(?'
                                    .'|(*:553)'
                                .')'
                                .'|nt/([^/]++)(*:573)'
                            .')'
                            .'|servicos/([^/]++)(?'
                                .'|(*:602)'
                            .')'
                        .')'
                    .')'
                    .'|/set_unidade/([^/]++)(*:634)'
                    .'|/novosga\\.(?'
                        .'|attendance/(?'
                            .'|info_senha/([^/]++)(*:688)'
                            .'|usuarios/([^/]++)(*:713)'
                        .')'
                        .'|settings/(?'
                            .'|servico(?'
                                .'|s_unidade/([^/]++)(?'
                                    .'|(*:765)'
                                .')'
                                .'|_usuario/([^/]++)/([^/]++)(?'
                                    .'|(*:803)'
                                .')'
                            .')'
                            .'|reiniciar/([^/]++)(*:831)'
                            .'|usuario/([^/]++)(*:855)'
                        .')'
                        .'|users/(?'
                            .'|([^/]++)/edit(*:886)'
                            .'|p(?'
                                .'|erfis/([^/]++)(*:912)'
                                .'|assword/([^/]++)(*:936)'
                            .')'
                        .')'
                        .'|triage/(?'
                            .'|imprimir/([^/]++)(*:973)'
                            .'|distribui_agendamento/([^/]++)(*:1011)'
                            .'|agendamentos/([^/]++)(*:1041)'
                        .')'
                        .'|monitor/(?'
                            .'|info_senha/([^/]++)(*:1081)'
                            .'|transferir/([^/]++)(*:1109)'
                            .'|reativar/([^/]++)(*:1135)'
                            .'|cancelar/([^/]++)(*:1161)'
                        .')'
                    .')'
                .')(?:/?)$}sD',
        );
        $this->dynamicRoutes = array(
            47 => array(array(array('_route' => 'admin_api_removeclient', '_controller' => 'App\\Controller\\Admin\\ApiController::removeOauthClient'), array('id'), array('DELETE' => 0), null, false, null)),
            79 => array(
                array(array('_route' => 'admin_departamentos_edit', '_controller' => 'App\\Controller\\Admin\\DepartamentoController::form'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null),
                array(array('_route' => 'admin_departamentos_delete', '_controller' => 'App\\Controller\\Admin\\DepartamentoController::delete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            105 => array(
                array(array('_route' => 'admin_locais_edit', '_controller' => 'App\\Controller\\Admin\\LocaisController::form'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null),
                array(array('_route' => 'admin_locais_delete', '_controller' => 'App\\Controller\\Admin\\LocaisController::delete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            135 => array(
                array(array('_route' => 'admin_perfis_edit', '_controller' => 'App\\Controller\\Admin\\PerfisController::form'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null),
                array(array('_route' => 'admin_perfis_delete', '_controller' => 'App\\Controller\\Admin\\PerfisController::delete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            166 => array(
                array(array('_route' => 'admin_prioridades_edit', '_controller' => 'App\\Controller\\Admin\\PrioridadesController::form'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null),
                array(array('_route' => 'admin_prioridades_delete', '_controller' => 'App\\Controller\\Admin\\PrioridadesController::delete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            196 => array(
                array(array('_route' => 'admin_servicos_edit', '_controller' => 'App\\Controller\\Admin\\ServicosController::form'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null),
                array(array('_route' => 'admin_servicos_delete', '_controller' => 'App\\Controller\\Admin\\ServicosController::delete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            225 => array(
                array(array('_route' => 'admin_unidades_edit', '_controller' => 'App\\Controller\\Admin\\UnidadesController::form'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null),
                array(array('_route' => 'admin_unidades_delete', '_controller' => 'App\\Controller\\Admin\\UnidadesController::delete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            265 => array(array(array('_route' => 'app_api_agendamentos_doget', '_controller' => 'App\\Controller\\Api\\AgendamentosController::doGet'), array('id'), array('GET' => 0), null, false, null)),
            296 => array(array(array('_route' => 'app_api_atendimentos_doget', '_controller' => 'App\\Controller\\Api\\AtendimentosController::doGet'), array('id'), array('GET' => 0), null, false, null)),
            322 => array(array(array('_route' => 'app_api_atendimentoshistorico_doget', '_controller' => 'App\\Controller\\Api\\AtendimentosHistoricoController::doGet'), array('id'), array('GET' => 0), null, false, null)),
            357 => array(
                array(array('_route' => 'app_api_departamentos_doget', '_controller' => 'App\\Controller\\Api\\DepartamentosController::doGet'), array('id'), array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_departamentos_doput', '_controller' => 'App\\Controller\\Api\\DepartamentosController::doPut'), array('id'), array('PUT' => 0), null, false, null),
                array(array('_route' => 'app_api_departamentos_dodelete', '_controller' => 'App\\Controller\\Api\\DepartamentosController::doDelete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            380 => array(array(array('_route' => 'app_api_filas_atendimentosusuario', '_controller' => 'App\\Controller\\Api\\FilasController::atendimentosUsuario'), array('unidadeId'), array('GET' => 0), null, false, null)),
            406 => array(
                array(array('_route' => 'app_api_locais_doget', '_controller' => 'App\\Controller\\Api\\LocaisController::doGet'), array('id'), array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_locais_doput', '_controller' => 'App\\Controller\\Api\\LocaisController::doPut'), array('id'), array('PUT' => 0), null, false, null),
                array(array('_route' => 'app_api_locais_dodelete', '_controller' => 'App\\Controller\\Api\\LocaisController::doDelete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            448 => array(array(array('_route' => 'app_api_painel_painel', '_controller' => 'App\\Controller\\Api\\PainelController::painel'), array('id'), array('GET' => 0), null, false, null)),
            464 => array(array(array('_route' => 'app_api_unidades_servicos', '_controller' => 'App\\Controller\\Api\\UnidadesController::servicos'), array('id'), array('GET' => 0), null, false, null)),
            484 => array(array(array('_route' => 'app_api_unidades_atendimentos', '_controller' => 'App\\Controller\\Api\\UnidadesController::atendimentos'), array('id'), array('GET' => 0), null, false, null)),
            493 => array(
                array(array('_route' => 'app_api_unidades_doget', '_controller' => 'App\\Controller\\Api\\UnidadesController::doGet'), array('id'), array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_unidades_doput', '_controller' => 'App\\Controller\\Api\\UnidadesController::doPut'), array('id'), array('PUT' => 0), null, false, null),
                array(array('_route' => 'app_api_unidades_dodelete', '_controller' => 'App\\Controller\\Api\\UnidadesController::doDelete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            518 => array(array(array('_route' => 'app_api_usuarios_doget', '_controller' => 'App\\Controller\\Api\\UsuariosController::doGet'), array('id'), array('GET' => 0), null, false, null)),
            553 => array(
                array(array('_route' => 'app_api_prioridades_doget', '_controller' => 'App\\Controller\\Api\\PrioridadesController::doGet'), array('id'), array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_prioridades_doput', '_controller' => 'App\\Controller\\Api\\PrioridadesController::doPut'), array('id'), array('PUT' => 0), null, false, null),
                array(array('_route' => 'app_api_prioridades_dodelete', '_controller' => 'App\\Controller\\Api\\PrioridadesController::doDelete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            573 => array(array(array('_route' => 'app_api_triagem_imprimir', '_controller' => 'App\\Controller\\Api\\TriagemController::imprimir'), array('id'), array('GET' => 0), null, false, null)),
            602 => array(
                array(array('_route' => 'app_api_servicos_doget', '_controller' => 'App\\Controller\\Api\\ServicosController::doGet'), array('id'), array('GET' => 0), null, false, null),
                array(array('_route' => 'app_api_servicos_doput', '_controller' => 'App\\Controller\\Api\\ServicosController::doPut'), array('id'), array('PUT' => 0), null, false, null),
                array(array('_route' => 'app_api_servicos_dodelete', '_controller' => 'App\\Controller\\Api\\ServicosController::doDelete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            634 => array(array(array('_route' => 'app_default_setunidade', '_controller' => 'App\\Controller\\DefaultController::setUnidade'), array('id'), array('POST' => 0), null, false, null)),
            688 => array(array(array('_route' => 'novosga_attendance_infosenha', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::infoSenha'), array('id'), array('GET' => 0), null, false, null)),
            713 => array(array(array('_route' => 'novosga_attendance_usuarios', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::usuarios'), array('id'), array('GET' => 0), null, false, null)),
            765 => array(
                array(array('_route' => 'novosga_settings_remove_servico_unidade', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::removeServicoUnidade'), array('id'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'novosga_settings_update_servicos_unidade', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateServico'), array('id'), array('PUT' => 0), null, false, null),
            ),
            803 => array(
                array(array('_route' => 'novosga_settings_add_servico_usuario', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::addServicoUsuario'), array('usuarioId', 'servicoId'), array('POST' => 0), null, false, null),
                array(array('_route' => 'novosga_settings_remove_servico_usuario', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::removeServicoUsuario'), array('usuarioId', 'servicoId'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'novosga_settings_update_servico_usuario', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateServicoUsuario'), array('usuarioId', 'servicoId'), array('PUT' => 0), null, false, null),
            ),
            831 => array(array(array('_route' => 'novosga_settings_reiniciar_contador', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::reiniciarContador'), array('id'), array('POST' => 0), null, false, null)),
            855 => array(array(array('_route' => 'novosga_settings_update_usuario', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateUsuario'), array('id'), array('PUT' => 0), null, false, null)),
            886 => array(array(array('_route' => 'novosga_users_edit', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::form'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            912 => array(array(array('_route' => 'novosga_users_default_perfis', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::perfis'), array('id'), array('GET' => 0), null, false, null)),
            936 => array(array(array('_route' => 'novosga_users_password', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::password'), array('id'), array('POST' => 0), null, false, null)),
            973 => array(array(array('_route' => 'novosga_triage_print', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::imprimir'), array('id'), array('GET' => 0), null, false, null)),
            1011 => array(array(array('_route' => 'novosga_triage_distribui_agendamento', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::distribuiSenhaAgendamento'), array('id'), array('POST' => 0), null, false, null)),
            1041 => array(array(array('_route' => 'novosga_triage_atendamentos', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::agendamentos'), array('id'), array('GET' => 0), null, false, null)),
            1081 => array(array(array('_route' => 'novosga_monitor_infosenha', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::infoSenha'), array('id'), array('GET' => 0), null, false, null)),
            1109 => array(array(array('_route' => 'novosga_monitor_transferir', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::transferir'), array('id'), array('POST' => 0), null, false, null)),
            1135 => array(array(array('_route' => 'novosga_monitor_reativar', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::reativar'), array('id'), array('POST' => 0), null, false, null)),
            1161 => array(array(array('_route' => 'novosga_monitor_cancelar', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::cancelar'), array('id'), array('POST' => 0), null, false, null)),
        );
    }
}
