<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @category   TBD
 * @package    TBD
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
echo $this->getData('nav')->render(); ?>

<section class="box w-50">
    <header><h1><?= $this->getHtml('Project') ?></h1></header>
    <div class="inner">
        <form>
            <table class="layout wf-100">
                <tr><td colspan="3"><label for="iName"><?= $this->getHtml('Name') ?></label>
                <tr><td colspan="2"><input type="text" id="iName" name="name" placeholder=""><td>
                <tr><td colspan="3"><label for="iDescription"><?= $this->getHtml('Description') ?></label>
                <tr><td colspan="2"><textarea id="iDescription" name="description"></textarea><td>
                <tr><td colspan="3"><label for="iStatus"><?= $this->getHtml('Status') ?></label>
                <tr><td colspan="2"><select id="iStatus" name="status">
                            <option value="<?= htmlspecialchars(\Modules\ProjectManagement\Models\ProjectStatus::ACTIVE , ENT_COMPAT, 'utf-8'); ?>"><?= $this->getHtml('Active') ?>
                            <option value="<?= htmlspecialchars(\Modules\ProjectManagement\Models\ProjectStatus::INACTIVE , ENT_COMPAT, 'utf-8'); ?>"><?= $this->getHtml('Inactive') ?>
                            <option value="<?= htmlspecialchars(\Modules\ProjectManagement\Models\ProjectStatus::FINISHED , ENT_COMPAT, 'utf-8'); ?>"><?= $this->getHtml('Finished') ?>
                            <option value="<?= htmlspecialchars(\Modules\ProjectManagement\Models\ProjectStatus::CANCELED , ENT_COMPAT, 'utf-8'); ?>"><?= $this->getHtml('Canceled') ?>
                            <option value="<?= htmlspecialchars(\Modules\ProjectManagement\Models\ProjectStatus::HOLD , ENT_COMPAT, 'utf-8'); ?>"><?= $this->getHtml('Hold') ?>
                        </select><td>
                <tr><td colspan="3"><label for="iFiles"><?= $this->getHtml('Files') ?></label>
                <tr><td colspan="2"><input type="file" id="iFiles" name="file" multiple><td>
                <tr><td colspan="3"><label for="iBudget"><?= $this->getHtml('Budget') ?></label>
                <tr><td colspan="2"><input type="text" id="iBudget" name="budget" placeholder=""><td>
                <tr><td><label for="iDue"><?= $this->getHtml('Start') ?></label><td><label for="iDue"><?= $this->getHtml('Due') ?></label><td>
                <tr><td><input type="datetime-local" id="iDue" name="due"><td><input type="datetime-local" id="iDue" name="due"><td>
                <tr><td><label for="iResponsibility"><?= $this->getHtml('Responsibility') ?></label><td><label for="iUser"><?= $this->getHtml('UserGroup') ?></label><td>
                <tr><td><select id="iStatus" name="status">
                            <option value="<?= htmlspecialchars(\Modules\ProjectManagement\Models\ProjectResponsibility::MANAGER , ENT_COMPAT, 'utf-8'); ?>"><?= $this->getHtml('Manager') ?>
                            <option value="<?= htmlspecialchars(\Modules\ProjectManagement\Models\ProjectResponsibility::OTHER , ENT_COMPAT, 'utf-8'); ?>"><?= $this->getHtml('Other') ?>
                        </select>
                    <td><input type="text" id="iUser" name="user" placeholder=""><td><button><?= $this->getHtml('Add', 0, 0); ?></button>
                <tr><td colspan="3"><input type="submit" value="<?= $this->getHtml('Create', 0, 0); ?>">
            </table>
        </form>
    </div>
</section>
