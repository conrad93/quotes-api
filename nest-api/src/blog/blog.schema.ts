import { Prop, Schema, SchemaFactory } from '@nestjs/mongoose';
import { Document } from 'mongoose';
import { Status } from 'src/common/enums/status.enum';

@Schema({ timestamps: true })
export class Blog extends Document {
  @Prop({ required: true, unique: true })
  title: string;

  @Prop({ required: true })
  content: string;

  @Prop()
  imageUri: string;

  @Prop({ type: [String], default: [] })
  tags: string[];

  @Prop({ default: false })
  isPublished: boolean;

  @Prop({ default: Date.now })
  publishedAt: Date;
  
  @Prop({ default: 0 })
  likes: number;

  @Prop()
  author: string;

  @Prop({ required: true, default: Status.ACTIVE, enum: Status })
  status: Status;

}

export const BlogSchema = SchemaFactory.createForClass(Blog);