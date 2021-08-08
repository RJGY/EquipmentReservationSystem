<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Labequipment[]|\Cake\Collection\CollectionInterface $labequipment
 */

$this->Html->scriptStart(['block' => true]);
echo "document.addEventListener('DOMContentLoaded', function() {
    function selected(date) {
        console.log(date);
    }
    var options = {format:'dd mm yyyy', onSelect: selected};
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });";
$this->Html->scriptEnd()
?>

<div class="labequipment index content">
    <?= $this->Html->link(__('New Labequipment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Labequipment') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('equip_id') ?></th>
                    <th><?= $this->Paginator->sort('equip_name') ?></th>
                    <th><?= $this->Paginator->sort('equip_campus') ?></th>
                    <th><?= $this->Paginator->sort('equip_lab') ?></th>
                    <th><?= $this->Paginator->sort('equip_discipline') ?></th>
                    <th><?= $this->Paginator->sort('equip_details') ?></th>
                    <th><?= $this->Paginator->sort('equip_media') ?></th>
                    <th><?= $this->Paginator->sort('equip_whs') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($labequipment as $labequipment): ?>
                <tr>
                    <td><?= $this->Number->format($labequipment->equip_id) ?></td>
                    <td><?= h($labequipment->equip_name) ?></td>
                    <td><?= h($labequipment->equip_campus) ?></td>
                    <td><?= h($labequipment->equip_lab) ?></td>
                    <td><?= h($labequipment->equip_discipline) ?></td>
                    <td><?= h($labequipment->equip_details) ?></td>
                    <td><?= h($labequipment->equip_media) ?></td>
                    <td><?= h($labequipment->equip_whs) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $labequipment->equip_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $labequipment->equip_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $labequipment->equip_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labequipment->equip_id)]) ?>
                        <?= $this->Form->postLink(__('Book'), ['action' => 'book', $labequipment->equip_id], ['confirm' => __('Are you sure you want to Book # {0}?', $labequipment->equip_id)]) ?> <!-- Lab Booking Button -->
                    </td>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>


<div class="card-panel teal lighten-2">
    <input type="text" class="datepicker" placeholder="Start Date" id="startdate"/>
</div>

<div class="card-panel teal lighten-2">
    <input type="text" class="datepicker" placeholder="End Date" id="enddate"/>
</div>