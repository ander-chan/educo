<?php

/* 
 * Copyright (C) 2018 ander
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

dol_fiche_head($head, 'teacherssubjects');
//baner
print '<div class="arearef heightref valignmiddle" width="100%">';
print '<table class="tagtable liste" >' . "\n";
print '<tr><td width="30%">' . $langs->trans("AcademicYear") . '</td><td width="70%" colspan="3">';
$academic->next_prev_filter = "te.fournisseur = 1";
print $form->showrefnav($academic, 'academicid', '', ($user->societe_id ? 0 : 1), 'rowid', 'ref', '', '');
print '</td></tr></table>';
// Part to create
//if ($action == 'create')
//{
print load_fiche_titre($langs->trans("NewMyModule"));
print '<form method="POST" action="' . $_SERVER["PHP_SELF"] . '">';
print '<input type="hidden" name="action" value="add">';
print '<input type="hidden" name="backtopage" value="' . $backtopage . '">';
print '<input type="hidden" name="academicid" value="' . $academicid . '">';
print '<input type="hidden" id="user_login" name="user_login" value="' . $user_login . '">';
dol_fiche_head();
print '<table class="border centpercent">' . "\n";
// print '<tr><td class="fieldrequired">'.$langs->trans("Label").'</td><td><input class="flat" type="text" size="36" name="label" value="'.$label.'"></td></tr>';
// 
//print '<tr><td class="fieldrequired">' . $langs->trans("Fieldref") . '</td><td><input class="flat" type="text" name="ref" value="' . GETPOST('ref') . '"></td></tr>';
//print '<tr><td class="fieldrequired">' . $langs->trans("Fieldlabel") . '</td><td><input class="flat" type="text" name="label" value="' . GETPOST('label') . '"></td></tr>';
//print '<tr><td class="fieldrequired">'.$langs->trans("Fieldstatus").'</td><td><input class="flat" type="text" name="status" value="'.GETPOST('status').'"></td></tr>';
print '<tr><td class="fieldrequired">' . $langs->trans("Fieldasignature_code") . '</td><td>';
print     $formeduco->select_pensum('fk_pensum', $academicid, $fk_pensum);
print '</td></tr>';
print '<tr><td class="fieldrequired">' . $langs->trans("Fieldfk_user") . '</td><td>';
print $form->select_dolusers($object->fk_user, 'fk_user');
print '</td></tr>';
//print '<tr><td class="fieldrequired">'.$langs->trans("Fieldfk_academicyear").'</td><td><input class="flat" type="text" name="fk_academicyear" value="'.GETPOST('fk_academicyear').'"></td></tr>';
//print '<tr><td class="fieldrequired">'.$langs->trans("Fieldentity").'</td><td><input class="flat" type="text" name="entity" value="'.GETPOST('entity').'"></td></tr>';
print '</table>' . "\n";
dol_fiche_end();
print '<div class="center"><input type="submit" class="button" name="add" value="' . $langs->trans("Create") . '"> &nbsp; <input type="submit" class="button" name="cancel" value="' . $langs->trans("Cancel") . '"></div>';
print '</form>';
//}
print '</div>';
print dol_fiche_end();
