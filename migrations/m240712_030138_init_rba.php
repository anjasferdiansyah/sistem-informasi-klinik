<?php

use yii\db\Migration;

class m170124_084304_init_rbac extends Migration
{
    public function up()
    {
        $auth = Yii::$app->authManager;

        // Add permissions

        $createUser = $auth->createPermission('createUser');
        $createUser->description = 'Create a User';
        $auth->add($createUser);

        $viewUser = $auth->createPermission('viewUser');
        $viewUser->description = 'View User';
        $auth->add($viewUser);

        $updateUser = $auth->createPermission('updateUser');
        $updateUser->description = 'Update User';
        $auth->add($updateUser);

        $createPasien = $auth->createPermission('createPasien');
        $createPasien->description = 'Create a Pasien';
        $auth->add($createPasien);

        $viewPasien = $auth->createPermission('viewPasien');
        $viewPasien->description = 'View Pasien';
        $auth->add($viewPasien);

        $updatePasien = $auth->createPermission('updatePasien');
        $updatePasien->description = 'Update Pasien';
        $auth->add($updatePasien);

        $deletePasien = $auth->createPermission('deletePasien');
        $deletePasien->description = 'Delete Pasien';
        $auth->add($deletePasien);

        $createObat = $auth->createPermission('createObat');
        $createObat->description = 'Create Obat';
        $auth->add($createObat);

        $updateObat = $auth->createPermission('updateObat');
        $updateObat->description = 'Update Obat';
        $auth->add($updateObat);

        $deleteObat = $auth->createPermission('deleteObat');
        $deleteObat->description = 'Delete Obat';
        $auth->add($deleteObat);



        $managePegawai = $auth->createPermission('managePegawai');
        $managePegawai->description = 'Manage Pegawai';
        $auth->add($managePegawai);

        $viewReports = $auth->createPermission('viewReports');
        $viewReports->description = 'View Reports';
        $auth->add($viewReports);

        $tindakan = $auth->createPermission('tindakan');
        $tindakan->description = 'Tindakan';
        $auth->add($tindakan);

        // Add roles and assign permissions to them
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $createPasien);
        $auth->addChild($admin, $viewPasien);
        $auth->addChild($admin, $updatePasien);
        $auth->addChild($admin, $deletePasien);
        $auth->addChild($admin, $createObat);
        $auth->addChild($admin, $updateObat);
        $auth->addChild($admin, $deleteObat);
        $auth->addChild($admin, $managePegawai);
        $auth->addChild($admin, $viewReports);

        $apoteker = $auth->createRole('apoteker');
        $auth->add($apoteker);
        $auth->addChild($apoteker, $createObat);
        $auth->addChild($apoteker, $updateObat);
        $auth->addChild($apoteker, $deleteObat);
        $auth->addChild($apoteker, $viewReports);

        $dokter = $auth->createRole('dokter');
        $auth->add($dokter);
        $auth->addChild($dokter, $viewPasien);
        $auth->addChild($dokter, $tindakan);

        // Assign roles to users. 1, 2, 3 are user IDs.
        $auth->assign($admin, 1);
        $auth->assign($apoteker, 2);
        $auth->assign($dokter, 3);
    }

    public function down()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }
}
