<?php
	include "lightbenc.php";
	$file = "1.torrent";   // �����ļ���·��
	// ���������º�����ȡ�����ļ�������Ϣ
	$info = Lightbenc::bdecode_getinfo($file);
//	echo var_dump($info);
//	// ���������ܽ��һЩ
//	echo $info['info']['name'].'<br />';  //��ȡ�����ļ���
//	// ��ȡTracker�������б�$info['announce-list'][/*�������б��еĵڼ���*/][0]
//	echo $info['announce-list'][1][0].'<br />';
//    // �ļ���Ϣ��أ��ļ����ȣ��ļ�·����$info['info']['files'][�ڼ����ļ�]['path'][0��ʾCD1��CD2�ȣ����ڼ����ļ���Ӧ��1��ʾ��Ӧ��·��]
//	//echo var_dump($info['info']['files'][0]);
//	echo $info['info']['files'][0]['length'].'<br />';
//	echo $info['info']['files'][0]['path'][0].':'.$info['info']['files'][0]['path'][1].'<br />';
	// ��ȡBT�ļ�hashֵ
	echo $info['info_hash'];
?>