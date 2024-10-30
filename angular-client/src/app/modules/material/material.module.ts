import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MatSlideToggleModule } from '@angular/material/slide-toggle';
import { MatSidenavModule } from '@angular/material/sidenav';
import { MatToolbarModule } from '@angular/material/toolbar';
import { MatIconModule } from '@angular/material/icon';
import { MatNavList, MatListItem } from '@angular/material/list';
import { MatButtonModule, MatIconButton } from '@angular/material/button';
import { MatCardModule } from '@angular/material/card';

const materialModules = [
  MatSlideToggleModule,
  MatSidenavModule,
  MatToolbarModule,
  MatIconModule,
  MatNavList,
  MatListItem,
  MatButtonModule,
  MatIconButton,
  MatCardModule
];

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    materialModules
  ],
  exports: [
    materialModules
  ]
})
export class MaterialModule { }