import { Component, OnDestroy, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-blog-list',
  templateUrl: './blog-list.component.html',
  styleUrl: './blog-list.component.css'
})
export class BlogListComponent implements OnInit, OnDestroy {

  constructor(private router: Router) {}

  ngOnInit(): void {}

  redirectToBlogForm(id: string): void {
    const blogId = id ? id : 'new';
    this.router.navigate(['/blog-form', blogId]);
  }

  ngOnDestroy(): void {}
}
