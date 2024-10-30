import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MaterialModule } from '../material/material.module';
import { BlogListComponent } from '../../components/blog-list/blog-list.component';
import { HomeComponent } from '../../components/home/home.component';

const appComponents = [
  BlogListComponent,
  HomeComponent
];

@NgModule({
  declarations: [
    appComponents
  ],
  imports: [
    CommonModule,
    MaterialModule
  ],
  exports: [
    appComponents
  ]
})
export class AppComponentModule { }
