import { Component } from '@angular/core';
import { RouterModule, RouterOutlet } from '@angular/router';
import { MaterialModule } from './modules/material/material.module';
import { CommonModule } from '@angular/common';
import { AppComponentModule } from './modules/app-component/app-component.module';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [
    CommonModule,
    RouterOutlet,
    RouterModule,
    MaterialModule,
    AppComponentModule
  ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'angular-client';
  opened: boolean = false;
}
