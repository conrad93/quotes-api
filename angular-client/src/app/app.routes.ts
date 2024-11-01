import { Routes } from '@angular/router';
import { BlogListComponent } from './components/blog-list/blog-list.component';
import { HomeComponent } from './components/home/home.component';
import { BlogFormComponent } from './components/blog-form/blog-form.component';

export const routes: Routes = [
    {
        path: '',
        redirectTo: 'home',
        pathMatch: 'full'
    },
    {
        path: 'home',
        component: HomeComponent
    },
    {
        path: 'blog-list',
        component: BlogListComponent
    },
    {
        path: 'blog-form/:id',
        component: BlogFormComponent
    },
    {
        path: '**',
        redirectTo: 'home',
    }
];
