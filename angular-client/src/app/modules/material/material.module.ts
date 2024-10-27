import { NgModule } from '@angular/core';
import { MatSlideToggleModule } from '@angular/material/slide-toggle';
import { MatSidenavModule } from '@angular/material/sidenav';
import { MatToolbarModule } from '@angular/material/toolbar';
import { MatIconModule } from '@angular/material/icon';
import { MatNavList, MatListItem } from '@angular/material/list';
import { MatButtonModule, MatIconButton } from '@angular/material/button';

@NgModule({
  declarations: [],
  imports: [
    MatSlideToggleModule,
    MatSidenavModule,
    MatToolbarModule,
    MatIconModule,
    MatNavList,
    MatListItem,
    MatButtonModule,
    MatIconButton
  ],
  exports: [
    MatSlideToggleModule,
    MatSidenavModule,
    MatToolbarModule,
    MatIconModule,
    MatNavList,
    MatListItem,
    MatButtonModule,
    MatIconButton
  ]
})
export class MaterialModule { }