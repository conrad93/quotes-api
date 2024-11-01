import { Component, OnDestroy, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-blog-form',
  templateUrl: './blog-form.component.html',
  styleUrl: './blog-form.component.css'
})
export class BlogFormComponent implements OnInit, OnDestroy {

  constructor(private router: Router) { }

  ngOnInit(): void {
  }

  redirectToBlogList(): void {
    this.router.navigate(['/blog-list']);
  }

  onSubmit() {
    console.log('Form submitted');
  }

  ngOnDestroy(): void {

  }
}
