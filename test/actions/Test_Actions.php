<?php

/**
 * This class will test some actions.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Test
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace PAMI\Client\Impl {
    /**
     * This class will test some actions.
     *
     * PHP Version 5
     *
     * @category   Pami
     * @package    Test
     * @subpackage Action
     * @author     Marcelo Gornstein <marcelog@gmail.com>
     * @license    http://marcelog.github.com/ Apache License 2.0
     * @link       http://marcelog.github.com/
     */
    class Test_Actions extends \PHPUnit\Framework\TestCase
    {
        private $_properties = [];

        public function setUp(): void
        {
            global $mockTime;
            $this->_properties = [];
            $mockTime = true;
        }

        private function _start(array $write, \PAMI\Message\Action\ActionMessage $action)
        {
            global $mock_stream_socket_client;
            global $mock_stream_set_blocking;
            global $mockTime;
            global $standardAMIStart;
            $mock_stream_socket_client = true;
            $mock_stream_set_blocking = true;
            $options = [
                'host' => '2.3.4.5',
                'scheme' => 'tcp://',
                'port' => 9999,
                'username' => 'asd',
                'secret' => 'asd',
                'connect_timeout' => 10,
                'read_timeout' => 10,
            ];
            $writeLogin = [
                "action: Login\r\nactionid: 1432.123\r\nusername: asd\r\nsecret: asd\r\n",
            ];
            setFgetsMock($standardAMIStart, $writeLogin);
            $client = new \PAMI\Client\Impl\ClientImpl($options);
            $client->open();
            if ($action instanceof \PAMI\Message\Action\DBGetAction) {
                $event = [
                    'Response: Success',
                    'EventList: start',
                    'ActionID: 1432.123',
                    '',
                    'Event: DBGetResponse',
                    'ActionID: 1432.123',
                    '',
                ];
            } else {
                $event = [
                    'Response: Success',
                    'ActionID: 1432.123',
                    '',
                ];
            }
            setFgetsMock($event, $write);
            $result = $client->send($action);
            $this->assertTrue($result instanceof \PAMI\Message\Response\ResponseMessage);
            return $client;
        }
        /**
         * @test
         */
        public function can_absolute_timeout()
        {
            $write = [
                "action: AbsoluteTimeout\r\nactionid: 1432.123\r\nchannel: SIP/asd\r\ntimeout: 10\r\n",
            ];
            $action = new \PAMI\Message\Action\AbsoluteTimeoutAction('SIP/asd', 10);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_login()
        {
            $write = [implode("\r\n", [
                'action: Login',
                'actionid: 1432.123',
                'username: foo',
                'secret: bar',
                '',
            ])];
            $action = new \PAMI\Message\Action\LoginAction('foo', 'bar');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_login_with_events()
        {
            $write = [implode("\r\n", [
                'action: Login',
                'actionid: 1432.123',
                'username: foo',
                'secret: bar',
                'events: all',
                '',
            ])];
            $action = new \PAMI\Message\Action\LoginAction('foo', 'bar', 'all');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_agent_logoff()
        {
            $write = [implode("\r\n", [
                'action: AgentLogoff',
                'actionid: 1432.123',
                'agent: asd',
                'soft: true',
                '',
            ])];
            $action = new \PAMI\Message\Action\AgentLogoffAction('asd', true);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_agents()
        {
            $write = [implode("\r\n", [
                'action: Agents',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\AgentsAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_atxfer()
        {
            $write = [implode("\r\n", [
                'action: Atxfer',
                'actionid: 1432.123',
                'channel: channel',
                'exten: exten',
                'context: context',
                'priority: priority',
                '',
            ])];
            $action = new \PAMI\Message\Action\AttendedTransferAction('channel', 'exten', 'context', 'priority');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_blindTransfer()
        {
            $write = [implode("\r\n", [
                'action: BlindTransfer',
                'actionid: 1432.123',
                'channel: channel',
                'exten: exten',
                'context: context',
                '',
            ])];
            $action = new \PAMI\Message\Action\BlindTransferAction('channel', 'exten', 'context');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_bridge()
        {
            $write = [implode("\r\n", [
                'action: Bridge',
                'actionid: 1432.123',
                'channel1: channel1',
                'channel2: channel2',
                'tone: true',
                '',
            ])];
            $action = new \PAMI\Message\Action\BridgeAction('channel1', 'channel2', true);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_bridge_info()
        {
            $bridge_uniqueid = '57cb3a7e-0fa3-4e28-924f-d7728b0d7a9a';

            $write = [implode("\r\n", [
                'action: BridgeInfo',
                'actionid: 1432.123',
                'bridgeuniqueid: ' . $bridge_uniqueid,
                '',
            ])];
            $action = new \PAMI\Message\Action\BridgeInfoAction($bridge_uniqueid);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_challenge()
        {
            $write = [implode("\r\n", [
                'action: Challenge',
                'actionid: 1432.123',
                'authtype: test',
                '',
            ])];
            $action = new \PAMI\Message\Action\ChallengeAction('test');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_change_monitor()
        {
            $write = [implode("\r\n", [
                'action: ChangeMonitor',
                'actionid: 1432.123',
                'channel: channel',
                'file: file',
                '',
            ])];
            $action = new \PAMI\Message\Action\ChangeMonitorAction('channel', 'file', true);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_command()
        {
            $write = [implode("\r\n", [
                'action: Command',
                'actionid: 1432.123',
                'command: command',
                '',
            ])];
            $action = new \PAMI\Message\Action\CommandAction('command');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_confbridge_list()
        {
            $conference = 'conf-59dba3997444e5';
            $write = [implode("\r\n", [
                'action: ConfbridgeList',
                'actionid: 1432.123',
                'conference: ' . $conference,
                '',
            ])];
            $action = new \PAMI\Message\Action\ConfbridgeListAction($conference);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_confbridge_mute()
        {
            $write = [implode("\r\n", [
                'action: ConfbridgeMute',
                'actionid: 1432.123',
                'channel: channel',
                'conference: conference',
                '',
            ])];
            $action = new \PAMI\Message\Action\ConfbridgeMuteAction('channel', 'conference');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_confbridge_unmute()
        {
            $write = [implode("\r\n", [
                'action: ConfbridgeUnmute',
                'actionid: 1432.123',
                'channel: channel',
                'conference: conference',
                '',
            ])];
            $action = new \PAMI\Message\Action\ConfbridgeUnmuteAction('channel', 'conference');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_core_settings()
        {
            $write = [implode("\r\n", [
                'action: CoreSettings',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\CoreSettingsAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_show_devices()
        {
            $write = [implode("\r\n", [
                'action: DongleShowDevices',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleShowDevicesAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_reload()
        {
            $write = [implode("\r\n", [
                'action: DongleReload',
                'actionid: 1432.123',
                'when: when',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleReloadAction('when');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_restart()
        {
            $write = [implode("\r\n", [
                'action: DongleRestart',
                'actionid: 1432.123',
                'when: when',
                'device: device',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleRestartAction('when', 'device');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_reset()
        {
            $write = [implode("\r\n", [
                'action: DongleReset',
                'actionid: 1432.123',
                'device: device',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleResetAction('device');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_send_pdu()
        {
            $write = [implode("\r\n", [
                'action: DongleSendPDU',
                'actionid: 1432.123',
                'device: device',
                'pdu: pdu',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleSendPDUAction('device', 'pdu');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_send_ussd()
        {
            $write = [implode("\r\n", [
                'action: DongleSendUSSD',
                'actionid: 1432.123',
                'device: device',
                'ussd: ussd',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleSendUSSDAction('device', 'ussd');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_stop()
        {
            $write = [implode("\r\n", [
                'action: DongleStop',
                'actionid: 1432.123',
                'when: when',
                'device: device',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleStopAction('when', 'device');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_start()
        {
            $write = [implode("\r\n", [
                'action: DongleStart',
                'actionid: 1432.123',
                'device: device',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleStartAction('device');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dongle_sms_send()
        {
            $write = [implode("\r\n", [
                'action: DongleSendSMS',
                'actionid: 1432.123',
                'device: device',
                'number: number',
                'message: message',
                '',
            ])];
            $action = new \PAMI\Message\Action\DongleSendSMSAction('device', 'number', 'message');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_core_status()
        {
            $write = [implode("\r\n", [
                'action: CoreStatus',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\CoreStatusAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_create_config()
        {
            $write = [implode("\r\n", [
                'action: CreateConfig',
                'actionid: 1432.123',
                'filename: file.conf',
                '',
            ])];
            $action = new \PAMI\Message\Action\CreateConfigAction('file.conf');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dahdi_dndoff()
        {
            $write = [implode("\r\n", [
                'action: DAHDIDNDOff',
                'actionid: 1432.123',
                'dahdichannel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\DAHDIDNDOffAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dahdi_dndon()
        {
            $write = [implode("\r\n", [
                'action: DAHDIDNDOn',
                'actionid: 1432.123',
                'dahdichannel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\DAHDIDNDOnAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dahdi_dialoffhook()
        {
            $write = [implode("\r\n", [
                'action: DAHDIDialOffhook',
                'actionid: 1432.123',
                'dahdichannel: channel',
                'number: number',
                '',
            ])];
            $action = new \PAMI\Message\Action\DAHDIDialOffHookAction('channel', 'number');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dahdi_hangup()
        {
            $write = [implode("\r\n", [
                'action: DAHDIHangup',
                'actionid: 1432.123',
                'dahdichannel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\DAHDIHangupAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dahdi_restart()
        {
            $write = [implode("\r\n", [
                'action: DAHDIRestart',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\DAHDIRestartAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dahdi_show_channels()
        {
            $write = [implode("\r\n", [
                'action: DAHDIShowChannels',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\DAHDIShowChannelsAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dahdi_transfer()
        {
            $write = [implode("\r\n", [
                'action: DAHDITransfer',
                'actionid: 1432.123',
                'dahdichannel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\DAHDITransferAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dbdel()
        {
            $write = [implode("\r\n", [
                'action: DBDel',
                'actionid: 1432.123',
                'family: family',
                'key: key',
                '',
            ])];
            $action = new \PAMI\Message\Action\DBDelAction('family', 'key');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dbdeltree()
        {
            $write = [implode("\r\n", [
                'action: DBDelTree',
                'actionid: 1432.123',
                'family: family',
                'key: key',
                '',
            ])];
            $action = new \PAMI\Message\Action\DBDelTreeAction('family', 'key');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dbget()
        {
            $write = [implode("\r\n", [
                'action: DBGet',
                'actionid: 1432.123',
                'family: family',
                'key: key',
                '',
            ])];
            $action = new \PAMI\Message\Action\DBGetAction('family', 'key');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_dbput()
        {
            $write = [implode("\r\n", [
                'action: DBPut',
                'actionid: 1432.123',
                'family: family',
                'key: key',
                'val: val',
                '',
            ])];
            $action = new \PAMI\Message\Action\DBPutAction('family', 'key', 'val');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_events_off()
        {
            $write = [implode("\r\n", [
                'action: Events',
                'actionid: 1432.123',
                'eventmask: off',
                '',
            ])];
            $action = new \PAMI\Message\Action\EventsAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_events()
        {
            $write = [implode("\r\n", [
                'action: Events',
                'actionid: 1432.123',
                'eventmask: a,b,c',
                '',
            ])];
            $action = new \PAMI\Message\Action\EventsAction(['a', 'b', 'c']);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_extension_state()
        {
            $write = [implode("\r\n", [
                'action: ExtensionState',
                'actionid: 1432.123',
                'exten: exten',
                'context: context',
                '',
            ])];
            $action = new \PAMI\Message\Action\ExtensionStateAction('exten', 'context');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_get_config()
        {
            $write = [implode("\r\n", [
                'action: GetConfig',
                'actionid: 1432.123',
                'filename: file.conf',
                'category: category',
                '',
            ])];
            $action = new \PAMI\Message\Action\GetConfigAction('file.conf', 'category');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_get_configjson()
        {
            $write = [implode("\r\n", [
                'action: GetConfigJSON',
                'actionid: 1432.123',
                'filename: file.conf',
                '',
            ])];
            $action = new \PAMI\Message\Action\GetConfigJSONAction('file.conf', 'category');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_get_var()
        {
            $write = [implode("\r\n", [
                'action: Getvar',
                'actionid: 1432.123',
                'variable: var',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\GetVarAction('var', 'channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_hangup()
        {
            $write = [implode("\r\n", [
                'action: Hangup',
                'actionid: 1432.123',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\HangupAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_hangup_with_cause()
        {
            $write = [implode("\r\n", [
                'action: Hangup',
                'actionid: 1432.123',
                'channel: channel',
                'cause: 5',
                '',
            ])];
            $action = new \PAMI\Message\Action\HangupAction('channel', 5);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_jabbersend()
        {
            $write = [implode("\r\n", [
                'action: JabberSend',
                'actionid: 1432.123',
                'jabber: jabber',
                'jid: jid',
                'screenname: jid',
                'message: message',
                '',
            ])];
            $action = new \PAMI\Message\Action\JabberSendAction('jabber', 'jid', 'message');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_list_categories()
        {
            $write = [implode("\r\n", [
                'action: ListCategories',
                'actionid: 1432.123',
                'filename: file.conf',
                '',
            ])];
            $action = new \PAMI\Message\Action\ListCategoriesAction('file.conf');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_list_commands()
        {
            $write = [implode("\r\n", [
                'action: ListCommands',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\ListCommandsAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_local_optimize_away()
        {
            $write = [implode("\r\n", [
                'action: LocalOptimizeAway',
                'actionid: 1432.123',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\LocalOptimizeAwayAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_mailbox_count()
        {
            $write = [implode("\r\n", [
                'action: MailboxCount',
                'actionid: 1432.123',
                'mailbox: mailbox',
                '',
            ])];
            $action = new \PAMI\Message\Action\MailboxCountAction('mailbox');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_mailbox_status()
        {
            $write = [implode("\r\n", [
                'action: MailboxStatus',
                'actionid: 1432.123',
                'mailbox: mailbox',
                '',
            ])];
            $action = new \PAMI\Message\Action\MailboxStatusAction('mailbox');
            $client = $this->_start($write, $action);
        }

        /**
         * @test
         */
        public function can_meetme_list()
        {
            $write = [implode("\r\n", [
                'action: MeetmeList',
                'actionid: 1432.123',
                'conference: conference',
                '',
            ])];
            $action = new \PAMI\Message\Action\MeetmeListAction('conference');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_meetme_mute()
        {
            $write = [implode("\r\n", [
                'action: MeetmeMute',
                'actionid: 1432.123',
                'meetme: meetme',
                'usernum: usernum',
                '',
            ])];
            $action = new \PAMI\Message\Action\MeetmeMuteAction('meetme', 'usernum');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_meetme_unmute()
        {
            $write = [implode("\r\n", [
                'action: MeetmeUnmute',
                'actionid: 1432.123',
                'meetme: meetme',
                'usernum: usernum',
                '',
            ])];
            $action = new \PAMI\Message\Action\MeetmeUnmuteAction('meetme', 'usernum');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_mix_monitor()
        {
            $write = [implode("\r\n", [
                'action: MixMonitor',
                'actionid: 1432.123',
                'channel: channel',
                'file: file',
                'options: options',
                '',
            ])];
            $action = new \PAMI\Message\Action\MixMonitorAction('channel');
            $action->setFile('file');
            $action->setOptions(['o', 'p', 't', 'i', 'o', 'n', 's']);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_module_check()
        {
            $write = [implode("\r\n", [
                'action: ModuleCheck',
                'actionid: 1432.123',
                'module: module',
                '',
            ])];
            $action = new \PAMI\Message\Action\ModuleCheckAction('module');
            $client = $this->_start($write, $action);
        }

        /**
         * @test
         */
        public function can_module_load()
        {
            $write = [implode("\r\n", [
                'action: ModuleLoad',
                'actionid: 1432.123',
                'module: module',
                'loadtype: load',
                '',
            ])];
            $action = new \PAMI\Message\Action\ModuleLoadAction('module');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_module_reload()
        {
            $write = [implode("\r\n", [
                'action: ModuleLoad',
                'actionid: 1432.123',
                'module: module',
                'loadtype: reload',
                '',
            ])];
            $action = new \PAMI\Message\Action\ModuleReloadAction('module');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_module_unload()
        {
            $write = [implode("\r\n", [
                'action: ModuleLoad',
                'actionid: 1432.123',
                'module: module',
                'loadtype: unload',
                '',
            ])];
            $action = new \PAMI\Message\Action\ModuleUnloadAction('module');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_monitor()
        {
            $write = [implode("\r\n", [
                'action: Monitor',
                'actionid: 1432.123',
                'channel: channel',
                'mix: true',
                'format: wav',
                'file: file',
                '',
            ])];
            $action = new \PAMI\Message\Action\MonitorAction('channel', 'file');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_voicemail_users_list()
        {
            $write = [implode("\r\n", [
                'action: VoicemailUsersList',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\VoicemailUsersListAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_pause_monitor()
        {
            $write = [implode("\r\n", [
                'action: PauseMonitor',
                'actionid: 1432.123',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\PauseMonitorAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_unpause_monitor()
        {
            $write = [implode("\r\n", [
                'action: UnpauseMonitor',
                'actionid: 1432.123',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\UnpauseMonitorAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_stop_monitor()
        {
            $write = [implode("\r\n", [
                'action: StopMonitor',
                'actionid: 1432.123',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\StopMonitorAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_stop_mix_monitor()
        {
            $write = [implode("\r\n", [
                'action: StopMixMonitor',
                'actionid: 1432.123',
                'channel: channel',
                'mixmonitorid: mix_monitor',
                '',
            ])];
            $action = new \PAMI\Message\Action\StopMixMonitorAction('channel');
            $action->setMixMonitorId('mix_monitor');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_status()
        {
            $write = [implode("\r\n", [
                'action: Status',
                'actionid: 1432.123',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\StatusAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_show_dialplan()
        {
            $write = [implode("\r\n", [
                'action: ShowDialPlan',
                'actionid: 1432.123',
                'context: context',
                'extension: extension',
                '',
            ])];
            $action = new \PAMI\Message\Action\ShowDialPlanAction('context', 'extension');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_set_var()
        {
            $write = [implode("\r\n", [
                'action: Setvar',
                'actionid: 1432.123',
                'variable: variable',
                'value: value',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\SetVarAction('variable', 'value', 'channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_reload()
        {
            $write = [implode("\r\n", [
                'action: Reload',
                'actionid: 1432.123',
                'module: module',
                '',
            ])];
            $action = new \PAMI\Message\Action\ReloadAction('module');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_ping()
        {
            $write = [implode("\r\n", [
                'action: Ping',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\PingAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_send_text()
        {
            $write = [implode("\r\n", [
                'action: SendText',
                'actionid: 1432.123',
                'channel: channel',
                'message: message',
                '',
            ])];
            $action = new \PAMI\Message\Action\SendTextAction('channel', 'message');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_sip_show_registry()
        {
            $write = [implode("\r\n", [
                'action: SIPshowregistry',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\SIPShowRegistryAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_sip_peers()
        {
            $write = [implode("\r\n", [
                'action: Sippeers',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\SIPPeersAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_sip_notify()
        {
            $write = [implode("\r\n", [
                'action: SIPnotify',
                'actionid: 1432.123',
                'channel: channel',
                '',
            ])];
            $action = new \PAMI\Message\Action\SIPNotifyAction('channel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_sip_show_peer()
        {
            $write = [implode("\r\n", [
                'action: SIPshowpeer',
                'actionid: 1432.123',
                'peer: peer',
                '',
            ])];
            $action = new \PAMI\Message\Action\SIPShowPeerAction('peer');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_sip_qualify_peer()
        {
            $write = [implode("\r\n", [
                'action: Sipqualifypeer',
                'actionid: 1432.123',
                'peer: peer',
                '',
            ])];
            $action = new \PAMI\Message\Action\SIPQualifyPeerAction('peer');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_vgsm_sms_tx()
        {
            $write = [implode("\r\n", [
                'action: vgsm_sms_tx',
                'actionid: 1432.123',
                'account: account',
                'x-sms-concatenate-total-messages: totalmsg',
                'x-sms-concatenate-sequence-number: seqnum',
                'x-sms-concatenate-refid: refid',
                'x-sms-class: class',
                'content: content',
                'x-sms-me: me',
                'content-transfer-encoding: encoding',
                'content-type: type',
                'to: to',
                '',
            ])];
            $action = new \PAMI\Message\Action\VGSMSMSTxAction();
            $action->setAccount('account');
            $action->setConcatTotalMsg('totalmsg');
            $action->setConcatSeqNum('seqnum');
            $action->setConcatRefId('refid');
            $action->setSmsClass('class');
            $action->setContent('content');
            $action->setMe('me');
            $action->setContentEncoding('encoding');
            $action->setContentType('type');
            $action->setTo('to');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_parked_calls()
        {
            $write = [implode("\r\n", [
                'action: ParkedCalls',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\ParkedCallsAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queues()
        {
            $write = [implode("\r\n", [
                'action: Queues',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueuesAction();
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_redirect()
        {
            $write = [implode("\r\n", [
                'action: Redirect',
                'actionid: 1432.123',
                'channel: channel',
                'exten: extension',
                'context: context',
                'priority: priority',
                'extrapriority: extrapriority',
                'extracontext: extracontext',
                'extraexten: extraextension',
                'extrachannel: extrachannel',
                '',
            ])];
            $action = new \PAMI\Message\Action\RedirectAction('channel', 'extension', 'context', 'priority');
            $action->setExtraPriority('extrapriority');
            $action->setExtraContext('extracontext');
            $action->setExtraExtension('extraextension');
            $action->setExtraChannel('extrachannel');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_unpause()
        {
            $write = [implode("\r\n", [
                'action: QueuePause',
                'actionid: 1432.123',
                'queue: queue',
                'reason: reason',
                'interface: interface',
                'paused: false',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueUnpauseAction('interface', 'queue', 'reason');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_pause()
        {
            $write = [implode("\r\n", [
                'action: QueuePause',
                'actionid: 1432.123',
                'queue: queue',
                'reason: reason',
                'interface: interface',
                'paused: true',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueuePauseAction('interface', 'queue', 'reason');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_summary()
        {
            $write = [implode("\r\n", [
                'action: QueueSummary',
                'actionid: 1432.123',
                'queue: queue',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueSummaryAction('queue');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_status()
        {
            $write = [implode("\r\n", [
                'action: QueueStatus',
                'actionid: 1432.123',
                'queue: queue',
                'member: member',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueStatusAction('queue', 'member');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_reset()
        {
            $write = [implode("\r\n", [
                'action: QueueReset',
                'actionid: 1432.123',
                'queue: queue',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueResetAction('queue');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_rule()
        {
            $write = [implode("\r\n", [
                'action: QueueRule',
                'actionid: 1432.123',
                'rule: rule',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueRuleAction('rule');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_remove()
        {
            $write = [implode("\r\n", [
                'action: QueueRemove',
                'actionid: 1432.123',
                'queue: queue',
                'interface: interface',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueRemoveAction('queue', 'interface');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_reload()
        {
            $write = [implode("\r\n", [
                'action: QueueReload',
                'actionid: 1432.123',
                'queue: queue',
                'members: yes',
                'rules: yes',
                'parameters: yes',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueReloadAction('queue', true, true, true);
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_penalty()
        {
            $write = [implode("\r\n", [
                'action: QueuePenalty',
                'actionid: 1432.123',
                'interface: interface',
                'penalty: penalty',
                'queue: queue',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueuePenaltyAction('interface', 'penalty', 'queue');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_log()
        {
            $write = [implode("\r\n", [
                'action: QueueLog',
                'actionid: 1432.123',
                'event: event',
                'queue: queue',
                'message: message',
                'interface: member',
                'uniqueid: uniqueid',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueLogAction('queue', 'event');
            $action->setMessage('message');
            $action->setMemberName('member');
            $action->setUniqueId('uniqueid');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_queue_add()
        {
            $write = [implode("\r\n", [
                'action: QueueAdd',
                'actionid: 1432.123',
                'interface: interface',
                'queue: queue',
                'paused: true',
                'membername: member',
                'penalty: penalty',
                'stateinterface: state',
                '',
            ])];
            $action = new \PAMI\Message\Action\QueueAddAction('queue', 'interface');
            $action->setPaused('true');
            $action->setMemberName('member');
            $action->setPenalty('penalty');
            $action->setStateInterface('state');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_play_dtmf()
        {
            $write = [implode("\r\n", [
                'action: PlayDTMF',
                'actionid: 1432.123',
                'channel: channel',
                'digit: 1',
                '',
            ])];
            $action = new \PAMI\Message\Action\PlayDTMFAction('channel', '1');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_park()
        {
            $write = [implode("\r\n", [
                'action: Park',
                'actionid: 1432.123',
                'channel: channel1',
                'channel2: channel2',
                'timeout: timeout',
                'parkinglot: lot',
                '',
            ])];
            $action = new \PAMI\Message\Action\ParkAction('channel1', 'channel2', 'timeout', 'lot');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_agi()
        {
            $write = [implode("\r\n", [
                'action: AGI',
                'actionid: 1432.123',
                'channel: channel1',
                'command: an agi command',
                'commandid: blah',
                '',
            ])];
            $action = new \PAMI\Message\Action\AGIAction('channel1', 'an agi command', 'blah');
            $client = $this->_start($write, $action);
        }
        /**
         * @test
         */
        public function can_originate()
        {
            $write = [implode("\r\n", [
                'action: Originate',
                'actionid: 1432.123',
                'channel: channel',
                'codecs: a,b',
                'async: true',
                'account: account',
                'callerid: clid',
                'timeout: timeout',
                'data: data',
                'application: app',
                'priority: priority',
                'context: context',
                'exten: extension',
                'Variable: a=b',
                '',
            ])];
            $action = new \PAMI\Message\Action\OriginateAction('channel');
            $action->setCodecs(['a', 'b']);
            $action->setAsync(true);
            $action->setAccount('account');
            $action->setCallerId('clid');
            $action->setTimeout('timeout');
            $action->setData('data');
            $action->setApplication('app');
            $action->setPriority('priority');
            $action->setContext('context');
            $action->setExtension('extension');
            $action->setVariable('a', 'b');
            $client = $this->_start($write, $action);
        }

        /**
         * @test
         */
        public function can_logoff()
        {
            $write = [implode("\r\n", [
                'action: Logoff',
                'actionid: 1432.123',
                '',
            ])];
            $action = new \PAMI\Message\Action\LogoffAction();
            $client = $this->_start($write, $action);
        }

        /**
         * @test
         */
        public function can_user_event()
        {
            $write = [implode("\r\n", [
                'action: UserEvent',
                'actionid: 1432.123',
                'userevent: FooEvent',
                'foo: Bar',
                'bar: Foo',
                '',
            ])];
            $action = new \PAMI\Message\Action\UserEventAction('FooEvent', ['Foo' => 'Bar', 'Bar' => 'Foo']);
            $client = $this->_start($write, $action);
        }

        /**
         * @test
         */
        public function can_wait_event()
        {
            $write = [implode("\r\n", [
                'action: WaitEvent',
                'actionid: 1432.123',
                'timeout: 20',
                '',
            ])];
            $action = new \PAMI\Message\Action\WaitEventAction(20);
            $client = $this->_start($write, $action);
        }

        /**
         * @test
         */
        public function can_set_actionid()
        {
            $action = new \PAMI\Message\Action\PingAction();
            // ActionID is between 0 and 69 characters long.
            $actionID = '121234567890123456789012345678901234567890';
            $action->setActionID($actionID);
            $this->assertSame($actionID, $action->getActionID());
        }

        /**
         * @test
         * @expectedException \PAMI\Exception\PAMIException
         */
        public function cannot_set_actionid_longer_than_69_characters()
        {
            $action = new \PAMI\Message\Action\PingAction();
            // A 70-character long ActionID
            $action->setActionID('1234567890123456789012345678901234567890123456789012345678901234567890');
        }

        /**
         * @test
         * @expectedException \PAMI\Exception\PAMIException
         */
        public function cannot_set_empty_actionid()
        {
            $action = new \PAMI\Message\Action\PingAction();
            // An empty ActionID
            $action->setActionID('');
        }

        /**
         * @test
         */
        public function can_update_config()
        {
            $number = 9876;
            $writeCreate = [ implode("\r\n", [
                'action: UpdateConfig',
                'actionid: 1432.123',
                'srcfilename: sip.conf',
                'dstfilename: sip.conf',
                'action-000000: NewCat',
                'cat-000000: ' . $number,
                'action-000001: Append',
                'cat-000001: ' . $number,
                'var-000001: username',
                'value-000001: test',
                'action-000002: Append',
                'cat-000002: ' . $number,
                'var-000002: secret',
                'value-000002: secret',
                '',
            ]) ];

            $actionCreate = new \PAMI\Message\Action\UpdateConfigAction();

            $actionCreate->setSrcFilename('sip.conf');
            $actionCreate->setDstFilename('sip.conf');

            $actionCreate->setAction('NewCat');
            $actionCreate->setCat($number);

            $actionCreate->setAction('Append');
            $actionCreate->setCat($number);
            $actionCreate->setVar('username');
            $actionCreate->setValue('test');

            $actionCreate->setAction('Append');
            $actionCreate->setCat($number);
            $actionCreate->setVar('secret');
            $actionCreate->setValue('secret');

            $client = $this->_start($writeCreate, $actionCreate);

            $writeDelete = [ implode("\r\n", [
                'action: UpdateConfig',
                'actionid: 1432.123',
                'srcfilename: sip.conf',
                'dstfilename: sip.conf',
                'reload: yes',
                'action-000000: DelCat',
                'cat-000000: ' . $number,
                '',
            ]) ];

            $actionDelete = new \PAMI\Message\Action\UpdateConfigAction();

            $actionDelete->setSrcFilename('sip.conf');
            $actionDelete->setDstFilename('sip.conf');
            $actionDelete->setReload(true);
            $actionDelete->setAction('DelCat');
            $actionDelete->setCat($number);

            $client = $this->_start($writeDelete, $actionDelete);
        }
    }
}
